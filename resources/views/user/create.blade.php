<x-AdminLayout>
    <x-slot name="title">
        - افزودن کاربر
    </x-slot>

    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="Input1" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="Input1">
                        <div class="text-danger">@error('name') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Email1" class="form-label">آدرس ایمیل</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="Email1" aria-describedby="emailHelp">
                        <div class="text-danger">@error('email') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Password1" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="Password1">
                        <div class="text-danger">@error('password') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="select" class="form-label">سطح کاربری</label>
                        <select class="form-select @error('role') is-invalid @enderror" name="role" aria-label="Default select example" id="select">
                            <option selected>انتخاب کنید ...</option>
                            <option value="user">کاربر عادی</option>
                            <option value="author">کاربر نویسنده</option>
                            <option value="admin">مدیر سایت</option>
                        </select>
                        <div class="text-danger">@error('role') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary">ایجاد کاربر جدید</button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
