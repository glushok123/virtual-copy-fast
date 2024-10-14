<table class="table color-white table-sm">

    @php
        $priceWhiteA4 = [
            55,
            50,
            45,
            40,
            35,
        ];

        $priceWhiteA3 = [
            110,
            95,
            85,
            75,
            65,
        ];

        $dop_m_120_a4 = 10;
        $dop_m_160_a4 = 15;
        $dop_m_200_a4 = 20;
        $dop_m_250_a4 = 25;
        $dop_m_300_a4 = 30;
        $dop_gl_170_a4 = 20;
        $dop_gl_250_a4 = 30;

        $dop_m_160_a3 = 30;
        $dop_m_200_a3 = 40;
        $dop_m_250_a3 = 50;
        $dop_m_280_a3 = 60;
        $dop_gl_170_a3 = 40;
        $dop_gl_250_a3 = 60;
    @endphp
    <thead class="thead-dark">
    <tr class='color-black'>
        <th scope="col" colspan="8"><h3> ЦВЕТНАЯ ПЕЧАТЬ И КОПИРОВАНИЕ А4</h3></th>
    </tr>
    </thead>
    <tbody>
    <tr class="color-orange">
        <th scope="row color-orange" colspan="8">ОДНОСТОРОНЯЯ ПЕЧАТЬ</th>
    </tr>
    <tr class='table-left'>
        <th>КОЛИЧЕСТВО</th>
        <td>1-50</td>
        <td>51-200</td>
        <td>101-500</td>
        <td>501-1000</td>
        <td>1000+</td>
    </tr>
    <tr class="color-orange">
        <th scope="row color-orange" colspan="8">МАТОВАЯ</th>
    </tr>
    <tr class='bold-table'>
        <td>80 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA4[0] }}</td>
        <td>{{ $priceWhiteA4[1] }}</td>
        <td>{{ $priceWhiteA4[2] }}</td>
        <td>{{ $priceWhiteA4[3] }}</td>
        <td>{{ $priceWhiteA4[4] }}</td>
    </tr>
    <tr class='bold-table'>
        <td>120 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA4[0] + $dop_m_120_a4 }}</td>
        <td>{{ $priceWhiteA4[1] + $dop_m_120_a4 }}</td>
        <td>{{ $priceWhiteA4[2] + $dop_m_120_a4 }}</td>
        <td>{{ $priceWhiteA4[3] + $dop_m_120_a4 }}</td>
        <td>{{ $priceWhiteA4[4] + $dop_m_120_a4 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>160 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA4[0] + $dop_m_160_a4 }}</td>
        <td>{{ $priceWhiteA4[1] + $dop_m_160_a4 }}</td>
        <td>{{ $priceWhiteA4[2] + $dop_m_160_a4 }}</td>
        <td>{{ $priceWhiteA4[3] + $dop_m_160_a4 }}</td>
        <td>{{ $priceWhiteA4[4] + $dop_m_160_a4 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>200 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA4[0] + $dop_m_200_a4 }}</td>
        <td>{{ $priceWhiteA4[1] + $dop_m_200_a4 }}</td>
        <td>{{ $priceWhiteA4[2] + $dop_m_200_a4 }}</td>
        <td>{{ $priceWhiteA4[3] + $dop_m_200_a4 }}</td>
        <td>{{ $priceWhiteA4[4] + $dop_m_200_a4 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>250 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA4[0] + $dop_m_250_a4 }}</td>
        <td>{{ $priceWhiteA4[1] + $dop_m_250_a4 }}</td>
        <td>{{ $priceWhiteA4[2] + $dop_m_250_a4 }}</td>
        <td>{{ $priceWhiteA4[3] + $dop_m_250_a4 }}</td>
        <td>{{ $priceWhiteA4[4] + $dop_m_250_a4 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>300 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA4[0] + $dop_m_300_a4 }}</td>
        <td>{{ $priceWhiteA4[1] + $dop_m_300_a4 }}</td>
        <td>{{ $priceWhiteA4[2] + $dop_m_300_a4 }}</td>
        <td>{{ $priceWhiteA4[3] + $dop_m_300_a4 }}</td>
        <td>{{ $priceWhiteA4[4] + $dop_m_300_a4 }}</td>
    </tr>
    <tr class="color-orange">
        <th scope="row color-orange" colspan="8">ГЛЯНЦЕВАЯ</th>
    </tr>
    <tr class='bold-table'>
        <td>170 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA4[0] + $dop_gl_170_a4 }}</td>
        <td>{{ $priceWhiteA4[1] + $dop_gl_170_a4 }}</td>
        <td>{{ $priceWhiteA4[2] + $dop_gl_170_a4 }}</td>
        <td>{{ $priceWhiteA4[3] + $dop_gl_170_a4 }}</td>
        <td>{{ $priceWhiteA4[4] + $dop_gl_170_a4 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>250 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA4[0] + $dop_gl_250_a4 }}</td>
        <td>{{ $priceWhiteA4[1] + $dop_gl_250_a4 }}</td>
        <td>{{ $priceWhiteA4[2] + $dop_gl_250_a4 }}</td>
        <td>{{ $priceWhiteA4[3] + $dop_gl_250_a4 }}</td>
        <td>{{ $priceWhiteA4[4] + $dop_gl_250_a4 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>САМОКЛЕЙКА</td>
        <td>{{ $priceWhiteA4[0] + 100 }}</td>
        <td>{{ $priceWhiteA4[1] + 100 }}</td>
        <td>{{ $priceWhiteA4[2] + 100 }}</td>
        <td>{{ $priceWhiteA4[3] + 100 }}</td>
        <td>{{ $priceWhiteA4[4] + 100 }}</td>
    </tr>
    </tbody>
</table>

<table class="table color-white table-sm">
    <thead class="thead-dark">
    <tr class='color-black'>
        <th scope="col" colspan="8"><h3> ЦВЕТНАЯ ПЕЧАТЬ И КОПИРОВАНИЕ А3</h3></th>
    </tr>
    </thead>
    <tbody>
    <tr class="color-orange">
        <th scope="row color-orange" colspan="8">ОДНОСТОРОНЯЯ ПЕЧАТЬ</th>
    </tr>
    <tr class='table-left'>
        <th>КОЛИЧЕСТВО</th>
        <td>1-50</td>
        <td>51-200</td>
        <td>101-500</td>
        <td>501-1000</td>
        <td>1000+</td>
    </tr>
    <tr class="color-orange">
        <th scope="row color-orange" colspan="8">МАТОВАЯ</th>
    </tr>
    <tr class='bold-table'>
        <td>80 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA3[0] }}</td>
        <td>{{ $priceWhiteA3[1] }}</td>
        <td>{{ $priceWhiteA3[2] }}</td>
        <td>{{ $priceWhiteA3[3] }}</td>
        <td>{{ $priceWhiteA3[4] }}</td>
    </tr>
    <!--tr class='bold-table'>
        <td>120 Г/М<sup>2</sup></td>
        <td>140</td>
        <td>130</td>
        <td>100</td>
        <td>80</td>
        <td>70</td>
    </tr-->
    <tr class='bold-table'>
        <td>160 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA3[0] + $dop_m_160_a3 }}</td>
        <td>{{ $priceWhiteA3[1] + $dop_m_160_a3 }}</td>
        <td>{{ $priceWhiteA3[2] + $dop_m_160_a3 }}</td>
        <td>{{ $priceWhiteA3[3] + $dop_m_160_a3 }}</td>
        <td>{{ $priceWhiteA3[4] + $dop_m_160_a3 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>200 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA3[0] + $dop_m_200_a3 }}</td>
        <td>{{ $priceWhiteA3[1] + $dop_m_200_a3 }}</td>
        <td>{{ $priceWhiteA3[2] + $dop_m_200_a3 }}</td>
        <td>{{ $priceWhiteA3[3] + $dop_m_200_a3 }}</td>
        <td>{{ $priceWhiteA3[4] + $dop_m_200_a3 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>250 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA3[0] + $dop_m_250_a3 }}</td>
        <td>{{ $priceWhiteA3[1] + $dop_m_250_a3 }}</td>
        <td>{{ $priceWhiteA3[2] + $dop_m_250_a3 }}</td>
        <td>{{ $priceWhiteA3[3] + $dop_m_250_a3 }}</td>
        <td>{{ $priceWhiteA3[4] + $dop_m_250_a3 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>280 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA3[0] + $dop_m_280_a3 }}</td>
        <td>{{ $priceWhiteA3[1] + $dop_m_280_a3 }}</td>
        <td>{{ $priceWhiteA3[2] + $dop_m_280_a3 }}</td>
        <td>{{ $priceWhiteA3[3] + $dop_m_280_a3 }}</td>
        <td>{{ $priceWhiteA3[4] + $dop_m_280_a3 }}</td>
    </tr>
    <tr class="color-orange">
        <th scope="row color-orange" colspan="8">ГЛЯНЦЕВАЯ</th>
    </tr>
    <tr class='bold-table'>
        <td>170 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA3[0] + $dop_gl_170_a3 }}</td>
        <td>{{ $priceWhiteA3[1] + $dop_gl_170_a3 }}</td>
        <td>{{ $priceWhiteA3[2] + $dop_gl_170_a3 }}</td>
        <td>{{ $priceWhiteA3[3] + $dop_gl_170_a3 }}</td>
        <td>{{ $priceWhiteA3[4] + $dop_gl_170_a3 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>250 Г/М<sup>2</sup></td>
        <td>{{ $priceWhiteA3[0] + $dop_gl_250_a3 }}</td>
        <td>{{ $priceWhiteA3[1] + $dop_gl_250_a3 }}</td>
        <td>{{ $priceWhiteA3[2] + $dop_gl_250_a3 }}</td>
        <td>{{ $priceWhiteA3[3] + $dop_gl_250_a3 }}</td>
        <td>{{ $priceWhiteA3[4] + $dop_gl_250_a3 }}</td>
    </tr>
    <tr class='bold-table'>
        <td>САМОКЛЕЙКА</td>
        <td>{{ $priceWhiteA4[0] + 200 }}</td>
        <td>{{ $priceWhiteA4[1] + 200 }}</td>
        <td>{{ $priceWhiteA4[2] + 200 }}</td>
        <td>{{ $priceWhiteA4[3] + 200 }}</td>
        <td>{{ $priceWhiteA4[4] + 200 }}</td>
    </tr>
    </tbody>
</table>
