@extends('layouts.admin')
@section('content')
<div class="container-fluid">
     <h2>Sidebar Dropdown</h2>

     <div style="overflow-x:auto;">
          <table>
               <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Points</th>

               </tr>
               <tr>
                    <td>Jill</td>
                    <td>Smith</td>
                    <td>50</td>

               </tr>
               <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>

               </tr>
               <tr>
                    <td>Adam</td>
                    <td>Johnson</td>
               </tr>
          </table>
     </div>
</div>
@endsection