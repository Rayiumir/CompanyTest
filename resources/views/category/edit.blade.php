<x-AdminLayout>
    <x-slot name="title">
        - ویرایش دسته بندی
    </x-slot>

    <div class="row">
        <div class="col-md-8">
            <div class="card rounded-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام دسته بندی</th>
                            <th scope="col">نام انگلیسی</th>
                            <th scope="col">دسته والد</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->getParentName() }}</td>
                                <td class="text-center">
                                    <a href=""><i class="fa-duotone fa-edit text-secondary"></i></a>
                                    <a onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash text-danger"></i></a>
                                    <form id="trash-{{$row->id}}" action="{{ route('categories.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded-4">
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="input1" class="form-label">نام دسته بندی</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="input1" value="{{ $category->name }}">
                            <div class="text-danger">@error('name') {{ $message }} @enderror</div>
                        </div>
                        <div class="mb-3">
                            <label for="select" class="form-label">انتخاب دسته والد</label>
                            <select id="select" class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                                <option selected>انتخاب کنید ...</option>
                                <option value="">ندارد</option>
                                @foreach($parent as $row)
                                    <option value="{{ $row->id }}" @if($row->id === $category->category_id) selected @endif>{{ $row->name }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">@error('category_id') {{ $message }} @enderror</div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">به روز رسانی دسته بندی</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-AdminLayout>
