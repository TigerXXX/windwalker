<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2016 LYRASOFT. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Windwalker\Form\Renderer;

use Windwalker\Form\Field\AbstractField;

/**
 * The FormRendererInterface class.
 *
 * @since  3.0
 */
interface FormRendererInterface
{
    /**
     * renderField
     *
     * @param AbstractField $field
     * @param array         $attribs
     * @param array         $options
     *
     * @return string
     */
    public function renderField(AbstractField $field, array $attribs = [], array $options = []);

    /**
     * renderLabel
     *
     * @param AbstractField $field
     * @param array         $attribs
     *
     * @return string
     */
    public function renderLabel(AbstractField $field, array $attribs = []);

    /**
     * renderInput
     *
     * @param AbstractField $field
     * @param array         $attribs
     *
     * @return string
     */
    public function renderInput(AbstractField $field, array $attribs = []);
}
