<?php


use Source\Objects\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    private $Article;

    public function setUp()
    {
        $this->Article = new Source\Objects\Article("testName", "testDescription", "testThumbnail", "testContent", "testImage");
    }

    public function testCanBeCreatedFromValidArticle()
    {
        $this->assertInstanceOf(Source\Objects\Article::class, $this->Article, "Article is an instance of an Article class");
    }

    public function testCanRetrieveArticleTitle()
    {
        $this->assertEquals("testName",$this->Article->getTitle(), "Could not retrieve Title");
    }

    public function testCanRetrieveArticleDescription()
    {
        $this->assertEquals("testDescription",$this->Article->getDescription(), "Could not retrieve Description");
    }

    public function testCanRetrieveArticleThumbnail()
    {
        $this->assertEquals("testThumbnail",$this->Article->getThumbnail(), "Could not retrieve Thumbnail");
    }

    public function testCanRetrieveArticleContent()
    {
        $this->assertEquals("testContent",$this->Article->getContent(), "Could not retrieve Content");
    }

    public function testCanRetrieveArticleImage()
    {
        $this->assertEquals("testImage",$this->Article->getImage(), "Could not retrieve Image");
    }


    public function tearDown()
    {
        $this->Article = null;
    }
}
