<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Measure PDF</title>
    <style>
        body{
            font-size: 11px!important;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 4px;
            margin-top: 4px;
            border: 1px solid;
        }

        table th,
        table td {
            padding:3px 3px;
            text-align: left;
            border: 1px solid ;

        }
        table tr{
            margin: 3px 0px!important;
        }
        table th {
            white-space: nowrap;
            font-weight: normal;
            font-weight: bold;
        }
        .w-5{
            width: 5%!important;
            border: none!important;
        }
        .w-10{
            width: 10%!important;
        }
        .w-15{
            width: 15%!important;
        }
        .w-20{
            width: 20%!important;
        }
        .w-25{
            width: 25%!important;
        }
        .w-30{
            width: 30%!important;
        }
        .w-40{
            width: 40%!important;
        }
        .w-60{
            width: 50%!important;
        }

        .center{
            text-align: center;
        }
        .color
        {
            background-color: red;
        }

    </style>

</head>
<body>

<main style="margin-top: 12px;">
    <div style="border: 1px solid" >
        <table style="border: none!important;margin-top: 0px!important;" border="0" cellspacing="0" cellpadding="0" >
                <tbody>
                <tr>
                    <td class="w-20">Name </td>
                    <td class="w-25"> {{$order->cust_cont_name_1}}</td>
                    <td class="w-5"></td>
                    @php
                        $staff=tower_contract($order->tower_contract);
                    @endphp
                    <td class="w-25">Measured By : </td>
                    <td class="w-25" >{{$staff->name??'N/A'}}</td>
                </tr>
                </tbody>
            </table>
        <table border="0" cellspacing="0" cellpadding="0" >
                <tbody>
                <tr>
                    <td class="w-20">Address  </td>
                    <td colspan="4">

                            <span style="width: 50%;float: left">{{$order->cust_cont_address_1}}, {{$order->cust_cont_address_2}} ( {{$order->aircode_1}} )</span>
                            <span style="width: 50%;float: right">Mobile : {{$order->cust_cont_mobile_1}}</span>

                    </td>
                </tr>
                </tbody>
            </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
                <tr>
                <td class="w-20 center"></td>
                <td class="w-20 center">Room Name</td>
                <td class="w-20 center">Length</td>
                <td class="w-20 center">Width</td>
                <td class="w-20 center">Type</td>
            </tr>
                @for($i=0;$i<9;$i++)
                    <tr>
                        <td class="w-20 center">Area {{$i+1}}</td>
                        <td class="w-20 center">{{$order->AreaDetail[$i]['area_name'] ?? ''}} </td>
                        <td class="w-20 center">{{$order->AreaDetail[$i]['length_in_m'] ?? ''}}</td>
                        <td class="w-20 center">{{ $order->AreaDetail[$i]['width_in_m'] ?? '' }}</td>
                        <td class="w-20 ">{{$order->AreaDetail[$i]['type']?? ''}}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
                <tr>
                    <td class="w-40 center">Sub Floor</td>
                    <td class="w-30 center">
                        @if($order->sub_floor_type=='Concrete') Concrete / <strike>Wood</strike>
                        @elseif($order->sub_floor_type=='Wood') <strike>Concrete </strike>/ Wood
                        @endif
                    </td>
                    <td class="w-10 center">Uplift</td>
                    <td class="w-20 ">Uplift+dispose needed: {{$order->up_lift}}</td>
                </tr>

            </tbody>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
                <tr>
                <td class="w-40 center">Build :  {{$order->build_type}}</td>
                <td class="w-30 center"> if new moisture reading  </td>
                <td class="w-10 center">{{$order->build_type=='New'?$order->moisture_read_per:''}}</td>
                <td class="w-20 ">Under floor heat: {{$order->underfloor_heating}}</td>
            </tr>
            </tbody>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
                <tr>
                    <td class="w-40 center">Screed Needed : {{$order->speed_required}}</td>
                    <td class="w-30 center color">Screed type</td>
                    <td class="w-30 "></td>
                </tr>
            </tbody>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
                <tr>
                    <td class="w-40 center color">Upload/disposal Yes / No</td>
                    <td class="w-30 center color">Sub floor</td>
                    <td class="w-30"></td>
                </tr>
            </tbody>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
            <tr>
                <td class="w-40 center">Door Saddles : {{$order->door_saddles_place}}</td>
                <td class="w-30 center color">Saddle Type</td>
                <td class="w-30 "></td>
            </tr>
            </tbody>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
            <tr>
                <td class="w-40 center">Skirting {{$order->skirting_place}}</td>
                <td class="w-30 center">Action : {{$order->action_skirting}}</td>
                <td class="w-30 "></td>
            </tr>
            </tbody>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
            <tr>
                <td class="w-40 center">Stairs : {{$order->stairs}}</td>
                <td class="w-30 center">Runner : {{$order->runner}}</td>
                <td class="w-30 ">Binding type : {{$order->binding_type}}</td>
            </tr>
            </tbody>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
            <tr>
                <td class="w-40 center">Rods : {{$order->rod}}</td>
                <td class="w-15 center">Rods type  </td>
                <td class="w-15 center">{{$order->rod_type}}</td>
                <td class="w-30 ">No of rods : {{$order->rod_no}}</td>
            </tr>
            </tbody>
        </table>
        <table border="0" cellspacing="0" cellpadding="0" >
            <tbody>
                <tr>
                    <td class="w-40 center">Underly (type and qty)</td>
                    <td class="w-60 center">Trim (type and qty)</td>
                </tr>
                @for($j=0;$j<3;$j++)
                    <tr>
                        <td class="w-40 ">Underly {{$j+1}} : {{$order->underlay[$j]['underlay']??''}}</td>
                        <td class="w-60 ">trim {{$j+1}} : {{$order->trim[$j]["trim"]??''}}</td>
                    </tr>
                    <tr>
                        <td class="w-40 ">Area : {{$order->underlay[$j]["area"]??''}}</td>
                        <td class="w-60 ">Area : {{$order->trim[$j]["trim_area"]??''}}</td>
                    </tr>
                @endfor

            </tbody>
        </table>

        <table border="0" style="margin-bottom: 0px!important;" cellspacing="0" cellpadding="0" >
            <tbody>
            <tr>
                <td class="w-40 " height="30">
                    <span class="color">
                        Measure Comment :
                    </span>
                </td>
            </tr>

            </tbody>
        </table>
    </div>






</main>
</body>
</html>
