<?php

namespace Admin\Support;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class FormBuilder
{
    /**
     * @var string
     */
    private $body = '';
    /**
     * @var array
     */
    private $route = array();
    /**
     * @var string
     */
    private $method = '';
    /**
     * @var string
     */
    private $class = 'form-horizontal';
    /**
     * @var bool
     */
    private $files = false;
    /**
     * @var string
     */
    private $type = '';
    /**
     * @var array
     */
    private $data = [];
    /**
     * @var string
     */
    private $module = '';

    /**
     * @return static
     */
    public static function make()
    {
        return new static();
    }

    /**
     * @param $method
     *
     * @return $this
     */
    public function method($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @param $module
     *
     * @return $this
     */
    public function module($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * @param $type
     *
     * @return $this
     */
    public function type($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param string $input
     *
     * @return $this
     */
    public function input($name, $label, $input = 'text')
    {
        $placeholder = $label;
        $value = $this->getValue($name);
        $this->body .= (string) view('base.form.components.input', compact('name', 'label', 'input', 'placeholder', 'value'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param bool|false $value
     * @param string     $col
     * @param string     $class
     *
     * @return $this
     */
    public function checkbox($name, $label, $value = false, $col = '12', $class = 'success')
    {
        $this->body .= (string) view('base.form.components.checkbox', compact('name', 'label', 'value', 'class', 'col'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param $list
     * @param null   $value
     * @param string $default
     * @param int    $width
     *
     * @return $this
     */
    public function select($name, $label, $list, $value = null, $default = 'Select a value', $width = 250)
    {
        $this->body .= (string) view('base.form.components.select', compact('name', 'label', 'list', 'value', 'default', 'width'));

        return $this;
    }

    /**
     * @param $name
     * @param $value
     *
     * @return $this
     */
    public function hidden($name, $value)
    {
        $this->body .= (string) view('base.form.components.hidden', compact('name', 'value'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param $placeholder
     * @param null $value
     * @param int  $rows
     *
     * @return $this
     */
    public function textArea($name, $label, $placeholder, $value = null, $rows = 3)
    {
        $this->body .= (string) view('base.form.components.textarea', compact('name', 'label', 'value', 'placeholder', 'rows'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param string $class
     * @param string $type
     *
     * @return $this
     */
    public function button($name, $label, $class = 'primary', $type = 'submit')
    {
        $this->body .= (string) view('base.form.components.button', compact('name', 'label', 'type', 'class'));

        return $this;
    }

    /**
     * @param $title
     *
     * @return $this
     */
    public function hr($title)
    {
        $this->body .= (string) view('base.form.components.hr', compact('title'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param null   $src
     * @param string $class
     *
     * @return $this
     */
    public function file($name, $label, $src = null, $class = 'primary')
    {
        $this->body .= (string) view('base.form.components.file', compact('name', 'src', 'label', 'class'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param null   $src
     * @param string $class
     *
     * @return $this
     */
    public function fileImage($name, $label, $src = null, $class = 'primary')
    {
        if (!starts_with($src, 'http') && strlen($src) > 0) {
            $src = env('API_URL_BASE').$src;
        }

        $this->body .= (string) view('base.form.components.file_image', compact('name', 'src', 'label', 'class'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     *
     * @return $this
     */
    public function tags($name, $label, $value = null)
    {
        $this->body .= (string) view('base.form.components.optional.tags', compact('name', 'label', 'value'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     *
     * @return $this
     */
    public function editor($name, $label, $value = null)
    {
        $edit = (strpos($this->type, 'edit') !== false) ? true : false;

        $this->body .= (string) view('base.form.components.optional.editor', compact('name', 'label', 'value', 'edit'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param null   $value
     * @param string $folder
     * @param string $default
     * @param int    $width
     *
     * @return $this
     */
    public function selectImages($name, $label, $value = null, $folder = 'icons', $default = 'Select a value', $width = 250)
    {
        $allowed_extension = ['svg'];

        $list = $this->getListImages($folder, $allowed_extension);

        $this->body .= (string) view('base.form.components.optional.select_images', compact('name', 'list', 'default', 'width', 'label', 'value'));

        return $this;
    }

    /**
     * @param $name
     * @param $label
     * @param $key_values
     * @param null   $value
     * @param string $folder
     * @param string $default
     * @param int    $widht
     *
     * @return $this
     */
    public function selectImagesPicker($name, $label, $key_values, $value = null, $folder = 'layouts', $default = 'Select a value', $widht = 250)
    {
        $allowed_extension = ['jpg'];

        $list = $this->getListImages($folder, $allowed_extension);

        $this->body .= (string) view('base.form.components.optional.select_images_picker', compact('name', 'list', 'default', 'width', 'label', 'value', 'key_values'));

        return $this;
    }

    /**
     * @param $url
     *
     * @return $this
     */
    public function route($url)
    {
        $this->route = ['url' => $url];

        return $this;
    }

    /**
     * @param $data
     *
     * @return $this
     */
    public function data($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @param $key
     */
    public function getValue($key)
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }

        return;
    }

    /**
     * @param $name
     * @param $default
     */
    public function getIndex($name, $default)
    {
        if (isset($default)) {
            return $default;
        }

        if (array_key_exists($name, $this->data)) {
            if (!is_array($this->data[$name]) &&  strpos($this->type, 'edit') !== false) {
                return $this->data[$name];
            }
        }

        return;
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public function existsIndex($name)
    {
        if (in_array($name, $this->data)) {
            if (!is_array($this->data[$name])) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param $folder
     * @param $allowed_extension
     *
     * @return array
     */
    public function getListImages($folder, $allowed_extension)
    {
        $files = File::files($folder);

        // Filter files by extension
        $files = array_filter($files, function ($value) use ($allowed_extension) {
            // Get extension of file
            $extension = substr($value, strpos($value, '.') + 1);

            if (in_array($extension, $allowed_extension)) {
                return $value;
            }
        });

        $keys = array_map(function ($value) {
            return $value;
        }, $files);

        $values = array_map(function ($value) use ($folder, $allowed_extension) {
            $value = str_replace($folder.'/', '', $value);
            $value = str_replace('_', ' ', $value);

            return substr($value, 0, strpos($value, '.'));
        }, $files);

        return array_combine($keys, $values);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function build()
    {
        return  view('base.form.layout',
            [
                'options' => array_merge($this->route, [
                    'class' => $this->class,
                    'files' => $this->files,
                    'method' => $this->method,
                    'id' => 'form-'.$this->type,
                ]),
                'type' => $this->type,
                'body' => $this->body,
                'classYesButton' => 'btn btn-theme  ',
                'classCancelButton' => 'btn btn-warning',
                'previousUrl' => url($this->module),
            ]);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->build();
    }
}
