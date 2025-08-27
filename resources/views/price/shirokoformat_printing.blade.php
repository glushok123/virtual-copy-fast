@php
    $title   = 'Черно - белое копирование / печать А4 и А3';
    $section = 'ОДНОСТОРОНЯЯ ПЕЧАТЬ';

    // Заголовки столбцов (форматы)
    $colLabels = ['А2', 'А1', 'А0', 'Кв.м'];

    // Строки с ценами
    $rows = [
        ['label' => '1-50',                             'values' => [100, 175, 300, 300]],
        ['label' => '51-200',                           'values' => [90, 110, 220, 220]],
        ['label' => '201+',                             'values' => [70, 90, 180, 180]],
        ['label' => 'МАТОВАЯ 180 Г/М<sup>2</sup>',      'values' => [500, 1000, 2000, 2000]],
        ['label' => 'ГЛЯНЦЕВАЯ 235 Г/М<sup>2</sup>',    'values' => [900, 1800, 3000, 3000]],
        ['label' => 'КАЛЬКА 90 Г/М<sup>2</sup>',        'values' => [400, 700, 1300, 1400]],
        ['label' => 'САМОКЛЕЙКА 90 Г/М<sup>2</sup>',    'values' => [1000, 2000, 3000, 3000]],
        ['label' => 'ХОЛСТ 320 Г/М<sup>2</sup>',        'values' => [1000, 2000, 5000, 5000]],
        ['label' => 'ЛЕКАЛО',                           'values' => ['-', '-', '-', 211]],
    ];
@endphp

<table class="table color-white table-sm">
    <thead class="thead-dark">
    <tr class='color-black'>
        <th scope="col" colspan="{{ 1 + count($colLabels) }}"><h3>{{ $title }}</h3></th>
    </tr>
    </thead>
    <tbody>
    <tr class="color-orange">
        <th scope="row color-orange" colspan="{{ 1 + count($colLabels) }}">{{ $section }}</th>
    </tr>

    <tr class='table-left'>
        <th></th>
        @foreach ($colLabels as $col)
            <td>{{ $col }}</td>
        @endforeach
    </tr>

    @foreach ($rows as $row)
        <tr class='bold-table'>
            {{-- label может содержать HTML (sup), поэтому {!! !!} --}}
            <td>{!! $row['label'] !!}</td>
            @foreach ($row['values'] as $v)
                <td>{{ $v }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
