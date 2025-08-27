@php
    $qtyRanges = ['2-10','11-50','51-100','101-200','201-300','301-500','500-1000'];

    $prices = [
        'title'  => 'Черно - белое копирование / печать А4 и А3',
        'single' => [
            'title' => 'ОДНОСТОРОННЯЯ ПЕЧАТЬ',
            'rows'  => [
                ['label' => 'А4',   'values' => [25,20,15,10,8,7,5]],
                ['label' => 'A3',   'values' => [50,40,30,20,16,14,10]],
                ['label' => 'A2',   'values' => [100,90,70,50,50,50,50]],
                ['label' => 'A1',   'values' => [175,110,90,75,75,75,75]],
                ['label' => 'A0',   'values' => [300,220,180,145,145,145,145]],
                ['label' => 'Кв.м', 'values' => [300,220,180,145,145,145,145]],
            ],
        ],
        'double' => [
            'title' => 'ДВУСТОРОННЯЯ ПЕЧАТЬ',
            'rows'  => [
                ['label' => 'А4', 'values' => [40,30,25,17,15,12,9]],
                ['label' => 'А3', 'values' => [70,60,50,34,30,24,18]],
            ],
        ],
    ];
@endphp

<table class="table color-white table-sm">
    <thead class="thead-dark">
    <tr class='color-black'>
        <th scope="col" colspan="8"><h3>{{ $prices['title'] }}</h3></th>
    </tr>
    </thead>
    <tbody>
    {{-- ОДНОСТОРОННЯЯ --}}
    <tr class="color-orange">
        <th scope="row color-orange" colspan="8">{{ $prices['single']['title'] }}</th>
    </tr>

    <tr class='table-left'>
        <th>КОЛИЧЕСТВО</th>
        @foreach($qtyRanges as $q)
            <td>{{ $q }}</td>
        @endforeach
    </tr>

    @foreach($prices['single']['rows'] as $row)
        <tr class='bold-table'>
            <td>{{ $row['label'] }}</td>
            @foreach($row['values'] as $val)
                <td>{{ $val }}</td>
            @endforeach
        </tr>
    @endforeach

    {{-- ДВУСТОРОННЯЯ --}}
    <tr class="color-orange">
        <th scope="row color-orange" colspan="8">{{ $prices['double']['title'] }}</th>
    </tr>

    @foreach($prices['double']['rows'] as $row)
        <tr class='bold-table'>
            <td>{{ $row['label'] }}</td>
            @foreach($row['values'] as $val)
                <td>{{ $val }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
