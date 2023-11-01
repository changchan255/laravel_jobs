<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <span class="pf-title">Vị trí đăng tuyển<span class="red_w">*</span></span>
            <div class="pf-field">
                <input type="text" placeholder="Designer" name="j_name" value="{{ old('j_name', $job->j_name ?? '') }}">
            </div>
            @if($errors->has('j_name'))
                <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_name') }}</span>
            @endif
        </div>
        <div class="col-lg-12">
            <span class="pf-title">Địa chỉ<span class="red_w">*</span></span>
            <div class="pf-field">
                <input type="text" placeholder="Designer" name="j_address" value="{{ old('j_address', $job->j_address ?? '') }}">
            </div>
            @if($errors->has('j_address'))
                <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_address') }}</span>
            @endif
        </div>
        <div class="col-lg-12">
            <span class="pf-title">Mô tả<span class="red_w">*</span></span>
            <div class="pf-field">
                <textarea name="j_description">{!! old('j_description', $job->j_description ?? '') !!}</textarea>
            </div>
            @if($errors->has('j_description'))
                <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_description') }}</span>
            @endif
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Ngành nghề<span class="red_w">*</span></span>
            <div class="pf-field">
                <select name="j_career_id" data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
                    <option value="">Chọn ngành nghề</option>
                    @foreach($careers as $item)
                        <option value="{{ $item->id }}"
                            {{ old('j_career_id', ($job->j_career_id ?? 0)) == $item->id ? "selected" : "" }}>{{ $item->c_name }}</option>
                    @endforeach
                </select>
            </div>
            @if($errors->has('j_career_id'))
                <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_career_id') }}</span>
            @endif
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Kinh nghiệm<span class="red_w">*</span></span>
            <div class="pf-field">
                <select name="j_experience_id" data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
                    <option value="">Chọn kinh nghiệm</option>
                    @foreach($experience as $item)
                        <option value="{{ $item->id }}"
                            {{ old('j_experience_id', ($job->j_experience_id ?? 0)) == $item->id ? "selected" : "" }}>{{ $item->a_name }}</option>
                    @endforeach
                </select>
            </div>
            @if($errors->has('j_experience_id'))
                <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_experience_id') }}</span>
            @endif
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Làm thêm giờ (Overtime)</span>
            <div class="pf-field">
                <select name="j_ot" data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
                    <option value="1" {{ old('j_ot', ($job->j_ot ?? 0)) == 1 ? "selected" : "" }}>Không</option>
                    <option value="2" {{ old('j_ot', ($job->j_ot ?? 0)) == 2 ? "selected" : "" }}>Có</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Cấp bậc<span class="red_w">*</span></span>
            <div class="pf-field">
                <select name="j_rank_id" data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
                    <option value="">Chọn cấp bậc</option>
                    @foreach($ranks as $item)
                        <option value="{{ $item->id }}"
                            {{ old('j_rank_id', ($job->j_rank_id ?? 0)) == $item->id ? "selected" : "" }}>{{ $item->a_name }}</option>
                    @endforeach
                </select>
            </div>
            @if($errors->has('j_rank_id'))
                <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_rank_id') }}</span>
            @endif
        </div>
        <div class="col-lg-6">
        <span class="pf-title">Loại hình làm việc<span class="red_w">*</span></span>
        <div class="pf-field">
            <select name="j_form_of_work_id" data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
                <option value="">Chọn loại hình</option>
                @foreach($formOfWork as $item)
                    <option value="{{ $item->id }}"
                        {{ old('j_form_of_work_id', ($job->j_form_of_work_id ?? 0)) == $item->id ? "selected" : "" }} >{{ $item->a_name }}</option>
                @endforeach
            </select>
        </div>
        @if($errors->has('j_form_of_work_id'))
            <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_form_of_work_id') }}</span>
        @endif
    </div>
        <div class="col-lg-6">
            <span class="pf-title">Mức lương</span>
            <div class="pf-field">
                <input type="text" name="j_salary" value="{{ old('j_salary', $job->j_salary ?? 0) }}">
            </div>
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Hạn nộp hồ sơ<span class="red_w">*</span></span>
            <div class="pf-field">
                <input type="date" name="j_time" value="{{ old('j_time', $job->j_time ?? 0) }}">
            </div>
            @if($errors->has('j_time'))
                <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_time') }}</span>
            @endif
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Email</span>
            <div class="pf-field">
                <input type="text" name="j_email" value="{{ old('j_email', $job->j_email ?? '') }}">
            </div>
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Số điện thoại</span>
            <div class="pf-field">
                <input type="text" name="j_phone" value="{{ old('j_phone', $job->j_phone ?? '') }}">
            </div>
        </div>
        <div class="col-lg-12 mb-5">
                <button type="submit">Xử lí thông tin</button>
        </div>

    </div>
</form>
