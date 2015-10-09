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
        $this->tags = new ArrayObject($this->tags);
    }

    /**
     * @param TagInterface[] $tags
     */
    public function setTags($tags)
    {
        $this->clearTags();
        $this->addTags($tags);
    }

    /**
     * @param TagInterface[] $tags
     */
    public function addTags($tags)
    {
        foreach ($tags as $tag) {
            $this->addTag($tag);
        }
    }

    /**
     * @param TagInterface $tag
     */
    public function addTag(TagInterface $tag)
    {
        $this->tags[] = $tag;
    }

    /**
     * @param TagInterface[] $tags
     */
    public function removeTags($tags)
    {
        foreach ($tags as $tag) {
            $this->removeTag($tag);
        }
    }

    /**
     * @param TagInterface $tag
     */
    public function removeTag(TagInterface $tag)
    {
        foreach ($this->tags as $key => $data) {
            if ($tag === $data) {
                unset($this->tags[$key]);
            }
        }
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
    }

    /**
     * Removes all tags
     */
    public function clearTags()
    {
        $this->removeTags($this->tags);
    }

    /**
     * @return TagInterface[]
     */
    public function getTags()
    {
        return $this->tags;
    }
}
