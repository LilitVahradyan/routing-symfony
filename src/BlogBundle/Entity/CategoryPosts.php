<?php

namespace BlogBundle\Entity;

/**
 * CategoryPosts
 */
class CategoryPosts
{
    /**
     * @var integer
     */
    private $postId;

    /**
     * @var integer
     */
    private $catId;


    /**
     * Set postId
     *
     * @param integer $postId
     *
     * @return CategoryPosts
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set catId
     *
     * @param integer $catId
     *
     * @return CategoryPosts
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->catId;
    }
}
