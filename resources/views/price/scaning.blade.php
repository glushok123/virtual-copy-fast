@php
    $title      = 'СКАНИРОВАНИЕ';
    $qtyRanges  = ['1-10', '11-50', '51-100', '101-500', '500+'];
    $rows = [
        ['label' => 'А4', 'values' => [20, 15, 8, 6, 4]],
        ['label' => 'А3', 'values' => [40, 30, 16, 12, 8]],
        ['label' => 'А2', 'values' => [60, 50, 45, 40, 30]],
        ['label' => 'А1', 'values' => [120, 95, 85, 75, 60]],
        ['label' => 'А0', 'values' => [200, 160, 150, 140, 130]],
    ];
@endphp

<table class="table color-white table-sm">
    <thead class="thead-dark">
    <tr class='color-black'>
        <th scope="col" colspan="{{ 1 + count($qtyRanges) }}"><h3>{{ $title }}</h3></th>
    </tr>
    </thead>
    <tbody>
    <tr class='table-left'>
        <th>КОЛИЧЕСТВО ЛИСТОВ</th>
        @foreach ($qtyRanges as $q)
            <td>{{ $q }}</td>
        @endforeach
    </tr>

    @foreach ($rows as $row)
        <tr class='bold-table'>
            <td>{{ $row['label'] }}</td>
            @foreach ($row['values'] as $val)
                <td>{{ $val }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
