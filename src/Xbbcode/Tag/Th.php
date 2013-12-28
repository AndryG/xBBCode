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
 * Class Th
 * Класс для тега [th]
 */
class Th extends Xbbcode
{
    public $behaviour = 'td';

    public function getHtml($tree = null)
    {
        $attr = ' class="bb"';
        $width = isset($this -> attrib['width']) ? $this -> attrib['width'] : '';
        if ($width) { $attr .= ' width="' . $this->htmlspecialchars($width) . '"'; }
        $height = isset($this -> attrib['height']) ? $this -> attrib['height'] : '';
        if ($height) { $attr .= ' height="' . $this->htmlspecialchars($height) . '"'; }
        $align = isset($this -> attrib['align']) ? $this -> attrib['align'] : '';
        if ($align) { $attr .= ' align="' . $this->htmlspecialchars($align) . '"'; }
        $valign = isset($this -> attrib['valign']) ? $this -> attrib['valign'] : '';
        if ($valign) { $attr .= ' valign="' . $this->htmlspecialchars($valign) . '"'; }
        if (isset($this -> attrib['colspan'])) {
            $colspan = (int) $this -> attrib['colspan'];
            if ($colspan) {
                $attr .= ' colspan="' . $colspan . '"';
            }
        }
        if (isset($this -> attrib['rowspan'])) {
            $rowspan = (int) $this -> attrib['rowspan'];
            if ($rowspan) {
                $attr .= ' rowspan="' . $rowspan . '"';
            }
        }

        return '<th' . $attr . '>' . parent::getHtml($this -> tree) . '</th>';
    }
}