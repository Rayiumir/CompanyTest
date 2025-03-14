<x-AdminLayout>
    <div class="card rounded-4">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="Input1" class="form-label">عنوان</label>
                                        <input type="text" class="form-control rounded-5 @error('title') is-invalid @enderror" name="title" id="Input1">
                                        <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Input2">لینک دانلود</label>
                                        <input type="text" class="form-control rounded-5 @error('metabox_field') is-invalid @enderror" id="Input2" name="metabox_field">
                                        <div class="text-danger">@error('metabox_field') {{ $message }} @enderror</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Textarea1" class="form-label">متن</label>
                                        <textarea class="form-control rounded-4 @error('content') is-invalid @enderror" name="content" id="Textarea1" rows="3"></textarea>
                                        <div class="text-danger">@error('content') {{ $message }} @enderror</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">تصاویر شاخص</label>
                                    <input class="form-control rounded-5 @error('img') is-invalid @enderror" name="img" type="file" id="formFile">
                                    <div class="text-danger">@error('img') {{ $message }} @enderror</div>
                                </div>
                                <div class="mb-3">
                                    <label for="Select1" class="form-label">دسته بندی</label>
                                    <select class="form-select rounded-5 @error('categories[]') is-invalid @enderror" name="categories[]" id="Select1" aria-label="Default select example">
                                        <option selected>انتخاب کنید ... </option>
                                        @foreach($categories as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">@error('categories[]') {{ $message }} @enderror</div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary rounded-5">ارسال پست</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-AdminLayout>
