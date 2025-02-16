<x-AdminLayout>
    <x-slot name="title">
        - ویرایش کاربر {{$user->name}}
    </x-slot>

    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="Input1" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="Input1" value="{{$user->name}}">
                        <div class="text-danger">@error('name') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Email1" class="form-label">آدرس ایمیل</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="Email1" value="{{$user->email}}">
                        <div class="text-danger">@error('email') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="select" class="form-label">سطح کاربری</label>
                        <select class="form-select @error('role') is-invalid @enderror" name="role" aria-label="Default select example" id="select">
                            <option value="user" @if($user->role === 'user') selected @endif>کاربر عادی</option>
                            <option value="author" @if($user->role === 'author') selected @endif>کاربر نویسنده</option>
                            <option value="admin" @if($user->role === 'admin') selected @endif>مدیر کل</option>
                        </select>
                        <div class="text-danger">@error('role') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary">به روز رسانی</button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
