<?php

namespace Http\Forms;

class SampleForm
{
    private string $field = '';
    private string $value = '';
    private string $item = '';

    public function createStatement(array $data): array
    {
        foreach ($data as $key => $value) {
            if (! empty($value)) {
                $this->field .= ", $key ";
                $this->value .= ", :$key ";
            }
        }

        $stringArray['fields'] = ltrim($this->field, ", ");
        $stringArray['values'] = ltrim($this->value, ", ");

        return $stringArray;
    }

    public function createParams(array $data, string $arrayName): array
    {
        foreach ($data as $key => $value) {
            if (!empty($value)) {
                $stringArray[$arrayName][$key] = $value;
            }
        }
        return $stringArray;
    }
}
