<style>
table.customTable {
  width: 30%;
  background-color: #9C1781;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #08030A;
  border-style: solid;
  color: #8A8A8A;
}

table.customTable td, table.customTable th {
  border-width: 2px;
  border-color: #08030A;
  border-style: solid;
  padding: 5px;
}
</style>

@extends('_layout.cork')

@section('content')
<div class="fq-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center order-md-0 order-1">
                    <div class="faq-header-content">
                        <h1 class="mb-4">{{ $book->title}}</h1>
                        <img src="{{ asset('assets/images/'.$book->slika->name)}}" height=500px>
                    </div>
                    <p>{{$book->description}}</p>
                </div>
            </div>
        </div>
</div>

<table class="customTable">
  <tbody>
    @if (count ($book->pisatel) == 1)
    <tr>
      <th>Author</th>
      <td><a href="{{ route('avtor.prikazi',['authorId'=> $book->pisatel[0]->id ]) }}">{{$book->pisatel[0]->firstName}} {{$book->pisatel[0]->lastName}}</a></td>
    </tr>
    @else
    <tr>
        <th>Authors</th>
         <td>
        <ul style="list-style-type:none;">
            @foreach($book->pisatel as $avtor)
            <li>
                <a href="{{ route('avtor.prikazi',['authorId'=> $avtor->id ]) }}">{{$avtor->firstName}} {{ $avtor->lastName}}</a>
             </li>
            @endforeach
        </ul>
        </td>
    </tr>
    @endif

    <tr>
      <th>Categories</th>
      <td>
      <ul style="list-style-type:none;">
            @foreach($book->kategorija as $kategorie)
            <li>{{$kategorie->name}}</li>
            @endforeach
        </ul>
      </td>
    </tr>
    
    <tr>
      <th>Pages</th>
      <td>{{$book->pages}}</td>
    </tr>

    <tr>
      <th>ISBN</th>
      <td>{{$book->barCode}}</td>
    </tr>

    <tr>
      <th>status</th>
      <td>{{$book->status->name}}</td>
    </tr>
  </tbody>
</table>



<table>
    <tr>
    <td>
<h2>Zemeni</h2>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered" width="50%">
        <thead>
            <tr>
                <th class="checkbox-area" scope="col">
                    <div class="form-check form-check-primary">
                        <input class="form-check-input" id="custom_mixed_parent_all" type="checkbox">
                    </div>
                </th>
                <th scope="col">Ime:</th>
                <th scope="col">Email:</th>
                <th class="text-center" scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @foreach($users as $user)
            <tr>
                <td>
                    <div class="form-check form-check-primary">
                        <input class="form-check-input custom_mixed_child" type="checkbox">
                    </div>
                </td>
                <td>
                        <div class="media">
                            <div class="avatar me-2">
                                <img alt="avatar" src="" class="rounded-circle" />
                            </div>
                            <div class="media-body align-self-center">
                                <p class="mb-0">{{$user->name}}</p>
                            </div>
                        </div>
                </td>
                <td>
                        <div class="media">
                            <div class="media-body align-self-center">
                                <p class="mb-0">{{$user->email}}</p>
                            </div>
                        </div>
                </td>
                <!--<td class="text-center">
                    <span class="badge badge-light-success">Online</span>
                </td>-->
                <td class="text-center">
                    <div class="action-btns">
                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </a>
                        <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a>
                        <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </td>

<td>
<h2>Slobodni knigi</h2>
<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered" width="50%">
        <thead>
            <tr>
                <th class="checkbox-area" scope="col">
                    <div class="form-check form-check-primary">
                        <input class="form-check-input" id="custom_mixed_parent_all" type="checkbox">
                    </div>
                </th>
                <th scope="col">Ime:</th>
                <th scope="col">Email:</th>
                <th class="text-center" scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @foreach($users as $user)
            <tr>
                <td>
                    <div class="form-check form-check-primary">
                        <input class="form-check-input custom_mixed_child" type="checkbox">
                    </div>
                </td>
                <td>
                        <div class="media">
                            <div class="avatar me-2">
                                <img alt="avatar" src="" class="rounded-circle" />
                            </div>
                            <div class="media-body align-self-center">
                                <p class="mb-0">{{$user->name}}</p>
                            </div>
                        </div>
                </td>
                <td>
                        <div class="media">
                            <div class="media-body align-self-center">
                                <p class="mb-0">{{$user->email}}</p>
                            </div>
                        </div>
                </td>
                <!--<td class="text-center">
                    <span class="badge badge-light-success">Online</span>
                </td>-->
                <td class="text-center">
                    <div class="action-btns">
                        <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </a>
                        <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a>
                        <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</td>
</tr>


@endsection

