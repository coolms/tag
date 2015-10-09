<?php
/**
 * CoolMS2 Tag Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/tag for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsTag\Mapping;

use Doctrine\Common\Collections\Collection;

interface TaggableInterface
{
    /**
     * @param TagInterface[] $tags
     */
    public function setTags($tags);

    /**
     * @param TagInterface[] $tags
     */
    public function addTags($tags);

    /**
     * @param TagInterface $tag
     */
    public function addTag(TagInterface $tag);

    /**
     * @param TagInterface[] $tags
     */
    public function removeTags($tags);

    /**
     * @param TagInterface $tag
     */
    public function removeTag(TagInterface $tag);

    /**
     * @param TagInterface $tag
     * @return bool
     */
    public function hasTag(TagInterface $tag);

    /**
     * Removes all tags
     */
    public function clearTags();

    /**
     * @return Collection
     */
    public function getTags();
}
