<?php // $Id$

// vim: expandtab sw=4 ts=4 sts=4:

/* BEGIN LICENSE BLOCK

    Copyright (c) 2005-2013 Frederic Minne <zefredz@gmail.com>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU LESSER General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  US

END LICENSE BLOCK */

function html_sanitize( $str )
{
    static $san = null;
    
    if ( empty( $san ) )
    {
        $san = new HTML_Sanitizer;
    }
    
    return $san->sanitize( $str );
}

function html_loose_sanitize( $str )
{
    static $san = null;
    
    if ( empty( $san ) )
    {
        $san = new HTML_Sanitizer;
        $san->allowAll();
    }
    
    return $san->sanitize( $str );

}
