<?php
/**
 * CoolMS2 Tag Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/tag for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsTag\Mapping\Traits;

use ArrayObject,
    CmsTag\Mapping\TagInterface;

trait TaggableTrait
{
    /**
     * @var TagInterface[]
     *
     * @Form\Type("ObjectSelect")
     * @Form\Required(false)
     * @Form\Attributes({"multiple":true,"size":5})
     * @Form\Options({
     *      "required":true,
     *      "label":"Select tags",
     *      "empty_option":"Select tags",
     *      "target_class":"CmsTag\Mapping\TagInterface",
     *      "text_domain":"CmsTag"})
     * @Form\Flags({"priority":0})
     */
    protected $tags = [];

    /**
     * __construct
     *
     * Initializes tags
     */
    public function __construct()
    {
        
    }

    /**
     * @param TagInterface[] $tags
     * @return self
     */
    public function setTags($tags)
    {
        $this->clearTags();
        $this->addTags($tags);

        return $this;
    }

    /**
     * @param TagInterface[] $tags
     * @return self
     */
    public function addTags($tags)
    {
        foreach ($tags as $tag) {
            $this->addTag($tag);
        }

        return $this;
    }

    /**
     * @param TagInterface $tag
     * @return self
     */
    public function addTag(TagInterface $tag)
    {
        $this->tags[] = $tag;
        return $this;
    }

    /**
     * @param TagInterface[] $tags
     * @return self
     */
    public function removeTags($tags)
    {
        foreach ($tags as $tag) {
            $this->removeTag($tag);
        }

        return $this;
    }

    /**
     * @param TagInterface $tag
     * @return self
     */
    public function removeTag(TagInterface $tag)
    {
        foreach ($this->tags as $key => $data) {
            if ($tag === $data) {
                unset($this->tags[$key]);
            }
        }

        return $this;
    }

    /**
     * @param TagInterface $tag
     * @return bool
     */
    public function hasTag(TagInterface $tag)
    {
        foreach ($this->tags as $data) {
            if ($tag === $data) {
                return true;
            }
        }

        return false;
    }

    /**
     * Removes all tags
     *
     * @return self
     */
    public function clearTags()
    {
        $this->removeTags($this->tags);
        return $this;
    }

    /**
     * @return TagInterface[]
     */
    public function getTags()
    {
        return $this->tags;
    }
}
