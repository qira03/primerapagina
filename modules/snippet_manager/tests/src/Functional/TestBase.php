<?php

namespace Drupal\Tests\snippet_manager\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\snippet_manager\Entity\Snippet;

/**
 * Base class for Snippet manager browser tests.
 */
abstract class TestBase extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['snippet_manager', 'snippet_manager_test', 'file'];

  protected static $permissions = [
    'administer snippets',
    'use text format snippet_manager_test_restricted_format',
    'use text format snippet_manager_test_basic_format',
  ];

  protected $snippetId;
  protected $snippetLabel;
  protected $snippetUrl;
  protected $snippetEditUrl;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Collect permissions.
    $class = get_class($this);
    $permissions = [];
    do {
      if (property_exists($class, 'permissions')) {
        $permissions = array_merge($permissions, $class::$permissions);
      }
    } while ($class = get_parent_class($class));

    $user = $this->drupalCreateUser($permissions);
    $this->drupalLogin($user);

    $this->snippetId = strtolower($this->randomMachineName());
    $this->snippetLabel = $this->snippetId;
    $this->snippetUrl = 'admin/structure/snippet/' . $this->snippetId;
    $this->snippetEditUrl = $this->snippetUrl . '/edit';

    $values = [
      'id' => $this->snippetId,
      'label' => $this->snippetLabel,
      'template' => [
        'value' => '<div class="snippet-test">{{ 3 * 3 }}</div>',
        'format' => 'snippet_manager_test_basic_format',
      ],
    ];
    Snippet::create($values)->save();
  }

  /**
   * Checks that an element exists on the current page.
   *
   * @param string $selector
   *   The XPath identifying the element to check.
   *
   * @deprecated
   *   Use $this->assertXpath() instead.
   */
  protected function assertByXpath($selector) {
    $this->assertXpath($selector);
  }

  /**
   * Checks that an element exists on the current page.
   *
   * @param string $selector
   *   The XPath identifying the element to check.
   */
  protected function assertXpath($selector) {
    // Add some syntactic sugar.
    $selector = preg_replace('/next::([a-z]+)/', 'following-sibling::\1[1]', $selector);
    $this->assertSession()->elementExists('xpath', $selector);
  }

  /**
   * Checks that an element does not exist on the current page.
   *
   * @param string $selector
   *   The XPath identifying the element to check.
   */
  protected function assertNoXpath($selector) {
    $this->assertSession()->elementNotExists('xpath', $selector);
  }

  /**
   * Checks that all given elements exist on the current page.
   *
   * @param string[] $selectors
   *   The XPath identifying the element to check.
   * @param string $prefix
   *   Prefix that should be prepended to each selector before checking.
   */
  protected function assertXpaths(array $selectors, $prefix = '') {
    foreach ($selectors as $selector) {
      $this->assertXpath($prefix . $selector);
    }
  }

  /**
   * Clicks the element with the given XPath selector.
   *
   * @param string $selector
   *   The XPath identifying the element to click.
   */
  protected function click($selector) {
    $this->getSession()->getDriver()->click($selector);
  }

  /**
   * Finds Drupal messages on the page.
   *
   * @param string $type
   *   A message type (e.g. status, warning, error).
   *
   * @return array
   *   List of found messages.
   */
  protected function getMessages($type) {
    $messages = [];

    $get_message = function ($element) {
      // Remove hidden heading.
      $message = preg_replace('#<h2[^>]*>.*</h2>#', '', $element->getHtml());
      $message = strip_tags($message, '<em>');
      return trim(preg_replace('#\s+#', ' ', $message));
    };

    $xpath = '//div[@aria-label="' . ucfirst($type) . ' message"]';
    // Error messages have one more wrapper.
    if ($type == 'error') {
      $xpath .= '/div[@role="alert"]';
    }
    $wrapper = $this->xpath($xpath);
    if (!empty($wrapper[0])) {
      unset($wrapper[0]->h2);
      $items = $wrapper[0]->findAll('xpath', '/ul/li');

      // Multiple messages are rendered with an HTML list.
      if ($items) {
        foreach ($items as $item) {
          $messages[] = $get_message($item);
        }
      }
      else {
        $messages[] = $get_message($wrapper[0]);
      }
    }
    return $messages;
  }

  /**
   * Passes if a given error message was found on the page.
   */
  protected function assertErrorMessage($message) {
    $messages = $this->getMessages('error');
    $this->assertTrue(in_array($message, $messages), 'Error message was found.');
  }

  /**
   * Passes if a given warning message was found on the page.
   */
  protected function assertWarningMessage($message) {
    $messages = $this->getMessages('warning');
    $this->assertTrue(in_array($message, $messages), 'Warning message was found.');
  }

  /**
   * Passes if a given status message was found on the page.
   */
  protected function assertStatusMessage($message) {
    $messages = $this->getMessages('status');
    $this->assertTrue(in_array($message, $messages), 'Status message was found.');
  }

  /**
   * Passes if no error messages were found on the page.
   */
  protected function assertNoErrorMessages() {
    $messages = $this->getMessages('error');
    $this->assertTrue(count($messages) == 0, 'No error messages were found.');
  }

  /**
   * Passes if expected page title was found.
   */
  protected function assertPageTitle($title) {
    $title_element = $this->xpath('//h1[contains(@class, "page-title")]');
    if (isset($title_element[0])) {
      $this->assertEquals($title, trim(strip_tags($title_element[0]->getHtml(), '<em>')));
    }
    else {
      $this->fail('Page title was not found.');
    }
  }

}
