<?php

/******************************************************************************
 *                                                                            *
 *   Copyright (C) 2006-2007  Dmitriy Skorobogatov  dima@pc.uz                *
 *                                                                            *
 *   This program is free software; you can redistribute it and/or modify     *
 *   it under the terms of the GNU General Public License as published by     *
 *   the Free Software Foundation; either version 2 of the License, or        *
 *   (at your option) any later version.                                      *
 *                                                                            *
 *   This program is distributed in the hope that it will be useful,          *
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of           *
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            *
 *   GNU General Public License for more details.                             *
 *                                                                            *
 *   You should have received a copy of the GNU General Public License        *
 *   along with this program; if not, write to the Free Software              *
 *   Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA *
 *                                                                            *
 ******************************************************************************/

namespace Xbbcode\Tag;

use Xbbcode\Xbbcode;


/**
 * Class Quote
 * Класс для тегов [quote] и [blockquote]
 */
class Quote extends Xbbcode
{
    public $rbr = 1;

    public function getHtml($tree = null)
    {
        if ('blockquote' === $this->tag) {
            $author = $this->htmlspecialchars($this->attrib['blockquote'], ENT_NOQUOTES);
        } else {
            $author = $this->htmlspecialchars($this->attrib['quote'], ENT_NOQUOTES);
        }
        if ($author) {
            $author = '<div class="bb_quote_author">' . $author . '</div>';
        }

        return '<blockquote class="bb_quote">' . $author
            . parent::getHtml($this -> tree) . '</blockquote>';
    }
}