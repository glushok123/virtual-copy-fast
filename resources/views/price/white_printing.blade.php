@php
    $whiteTables = [
        [
            'title'     => 'ЦВЕТНАЯ ПЕЧАТЬ И КОПИРОВАНИЕ А4',
            'section'   => 'ОДНОСТОРОНЯЯ ПЕЧАТЬ',
            'qtyRanges' => ['1-50', '51-100', '101-500', '501-1000', '1000+'],
            'groups'    => [
                [
                    'title' => 'МАТОВАЯ',
                    'rows'  => [
                        ['label' => '80 Г/М<sup>2</sup>',  'values' => [70, 60, 50, 40, 30]],
                        ['label' => '120 Г/М<sup>2</sup>', 'values' => [75, 65, 60, 55, 50]],
                        ['label' => '160 Г/М<sup>2</sup>', 'values' => [80, 75, 70, 65, 60]],
                        ['label' => '200 Г/М<sup>2</sup>', 'values' => [85, 80, 75, 70, 65]],
                        ['label' => '250 Г/М<sup>2</sup>', 'values' => [90, 85, 80, 75, 70]],
                        ['label' => '300 Г/М<sup>2</sup>', 'values' => [100, 95, 90, 85, 80]],
                    ],
                ],
                [
                    'title' => 'ГЛЯНЦЕВАЯ',
                    'rows'  => [
                        ['label' => '170 Г/М<sup>2</sup>', 'values' => [70, 65, 60, 50, 45]],
                        ['label' => '250 Г/М<sup>2</sup>', 'values' => [90, 85, 80, 75, 70]],
                        ['label' => 'САМОКЛЕЙКА',          'values' => [150, 145, 140, 130, 125]],
                    ],
                ],
            ],
        ],
        [
            'title'     => 'ЦВЕТНАЯ ПЕЧАТЬ И КОПИРОВАНИЕ А3',
            'section'   => 'ОДНОСТОРОНЯЯ ПЕЧАТЬ',
            'qtyRanges' => ['1-50', '51-200', '101-500', '501-1000', '1000+'],
            'groups'    => [
                [
                    'title' => 'МАТОВАЯ',
                    'rows'  => [
                        ['label' => '80 Г/М<sup>2</sup>',  'values' => [110, 85, 75, 55, 45]],
                        ['label' => '160 Г/М<sup>2</sup>', 'values' => [140, 115, 105, 85, 75]],
                        ['label' => '200 Г/М<sup>2</sup>', 'values' => [150, 125, 115, 95, 85]],
                        ['label' => '250 Г/М<sup>2</sup>', 'values' => [160, 135, 125, 105, 95]],
                        ['label' => '280 Г/М<sup>2</sup>', 'values' => [170, 145, 135, 115, 105]],
                    ],
                ],
                [
                    'title' => 'ГЛЯНЦЕВАЯ',
                    'rows'  => [
                        ['label' => '170 Г/М<sup>2</sup>', 'values' => [150, 125, 115, 95, 85]],
                        ['label' => '250 Г/М<sup>2</sup>', 'values' => [170, 145, 135, 115, 105]],
                        ['label' => 'САМОКЛЕЙКА',          'values' => [300, 270, 240, 200, 190]],
                    ],
                ],
            ],
        ],
    ];
@endphp

@foreach ($whiteTables as $table)
    <table class="table color-white table-sm">
        <thead class="thead-dark">
        <tr class='color-black'>
            <th scope="col" colspan="8"><h3> {{ $table['title'] }}</h3></th>
        </tr>
        </thead>
        <tbody>
        <tr class="color-orange">
            <th scope="row color-orange" colspan="8">{{ $table['section'] }}</th>
        </tr>
        <tr class='table-left'>
            <th>КОЛИЧЕСТВО</th>
            @foreach ($table['qtyRanges'] as $q)
                <td>{{ $q }}</td>
            @endforeach
        </tr>

        @foreach ($table['groups'] as $group)
            <tr class="color-orange">
                <th scope="row color-orange" colspan="8">{{ $group['title'] }}</th>
            </tr>

            @foreach ($group['rows'] as $row)
                <tr class='bold-table'>
                    {{-- label может содержать HTML (sup), поэтому {!! !!} --}}
                    <td>{!! $row['label'] !!}</td>
                    @foreach ($row['values'] as $val)
                        <td>{{ $val }}</td>
                    @endforeach
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
@endforeach
