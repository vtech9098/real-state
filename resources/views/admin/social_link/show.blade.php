@extends('admin.layout.layout')
@section('content')
    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Social Link
                    <a class="btn btn-success btn-rounded btn-fw" style="float:right"
                        href="{{ route('social_link.add') }}">Add</a>

                </h4>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Icon
                                </th>
                                <th>
                                    Link
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($socialLinks as $sociallink)
                                <tr class="table">
                                    <td>
                                        {{ $sociallink->social_id }}
                                    </td>
                                    <td>
                                        {{ $sociallink->icon }}
                                    </td>
                                    <td>
                                        {{ $sociallink->link }}
                                    </td>
                                    <td>
                                        {{ $sociallink->status }}
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
