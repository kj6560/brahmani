@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xl-12">
            <div class="row">
                @csrf
                <form action="/admin/storeStates" method="POST">
                    @csrf
                    
                    <div class="card mb-4">
                        <h5 class="card-header">Activate States </h5>

                        <div class="card-body">


                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr class="text-nowrap">
                                            <th>State Name</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                foreach($states as $state) {
                                                    
                                                    echo "<tr>";
                                                    echo "<td>".$state->state_name."</td>";
                                                    ?>
                                                    <td><input type='checkbox' name='status[{{$state->id}}]' @if ($state->is_active)
                                                    checked
                                                    @else
                                                    @endif></td>
                                                    <?php
                                                    echo "</tr>";
                                                }
                                            ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-search-input" class="col-md-2 col-form-label"></label>
                                <div class="col-md-10">
                                    <input class="btn btn-primary" type="submit" value="submit" id="submit" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection