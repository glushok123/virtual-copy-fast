@php
    $qtyRanges = ['2-10','11-50','51-100','101-200','201-300','301-500','500-1000'];

    $prices = [
        'title'  => 'Черно - белое копирование / печать А4 и А3',
        'single' => [
            'title' => 'ОДНОСТОРОННЯЯ ПЕЧАТЬ',
            'rows'  => [
                ['label' => 'А4',   'values' => [35,30,25,15,15,10,7]],
                ['label' => 'A3',   'values' => [70,60,50,40,30,20,14]],
                ['label' => 'A2',   'values' => [200,150,130,110,100,90,80]],
                ['label' => 'A1',   'values' => [350,300,250,220,200,180,150]],
                ['label' => 'A0',   'values' => [600,550,500,400,350,300,250]],
                ['label' => 'Кв.м', 'values' => [600,550,500,400,350,300,250]],
            ],
        ],
        'double' => [
            'title' => 'ДВУСТОРОННЯЯ ПЕЧАТЬ',
            'rows'  => [
                ['label' => 'А4', 'values' => [50,45,40,35,30,25,20]],
                ['label' => 'А3', 'values' => [100,90,80,70,60,50,40]],
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
