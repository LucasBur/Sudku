<?php

class SudokuGrid implements GridInterface
{
    /* Insérer le code ici */
    public static function loadFromFile($var): ?SudokuGrid
    {
        $file = file_get_contents($var);
        if ($file == null) {
            return null;
        }
        else {
            return $file;
        }
    }

    public function __construct(array $data)
    {
        return null;
    }

    public function get(int $rowIndex, int $columnIndex): int
    {
        return null;
    }

    public function set(int $rowIndex, int $columnIndex, int $value): void
    {

    }

    public function row(int $rowIndex): array
    {
        return null;
    }

    public function column(int $columnIndex): array
    {
        return null;
    }

    public function square(int $squareIndex): array
    {
        return null;
    }

    public function display(): string
    {
        return null;
    }

    public function isValueValidForPosition(int $rowIndex, int $columnIndex, int $value): bool
    {
        return true;
    }

    public function getNextRowColumn(int $rowIndex, int $columnIndex): array
    {
        return null;
    }

    public function isValid(): bool
    {
        return true;
    }

    public function isFilled(): bool
    {
        return true;
    }
}
