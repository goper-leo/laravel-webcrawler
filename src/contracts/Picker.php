<?php

namespace Goper\Websaper\Contracts;

interface Picker
{
    /**
     * Get site title
     *
     * @param  string  $content
     * @return
     */
    public function title($content);

    /**
     * Get summary
     *
     * @param  string  $content
     * @return
     */
    public function summary($content);

    /**
     * Get content
     *
     * @param  string  $content
     * @return
     */
    public function content($content);
}
