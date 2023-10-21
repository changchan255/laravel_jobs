<form>
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
            <span class="pf-title">Mô tả</span>
            <div class="pf-field">
                <textarea name="j_description">{!! old('j_description', $job->j_description ?? '') !!}</textarea>
            </div>
            @if($errors->has('j_description'))
                <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_description') }}</span>
            @endif
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Ngành nghề</span>
            <div class="pf-field">
                <select name="j_career_id" data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
                    <option>Chọn ngành nghề</option>
                    @foreach($careers as $item)
                        <option value="{{ $item->id }}">{{ $item->c_name }}</option>
                    @endforeach
                </select>
            </div>
            @if($errors->has('j_career_id'))
                <span class="text-danger" style="color: red !important;font-size: 13px">{{ $errors->first('j_career_id') }}</span>
            @endif
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Kinh nghiệm</span>
            <div class="pf-field">
                <select name="j_experience_id" data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
                    <option>Chọn kinh nghiệm</option>
                    @foreach($experience as $item)
                        <option value="{{ $item->id }}">{{ $item->a_name }}</option>
                    @endforeach
                </select>
            </div>
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
        <div class="col-lg-6">
            <span class="pf-title">Offerd Salary</span>
            <div class="pf-field">
                <select data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
                    <option>Web Development</option>
                    <option>Web Designing</option>
                    <option>Art &amp; Culture</option>
                    <option>Reading &amp; Writing</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <span class="pf-title">Career Level</span>
            <div class="pf-field">
                <select data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
                    <option>Web Development</option>
                    <option>Web Designing</option>
                    <option>Art &amp; Culture</option>
                    <option>Reading &amp; Writing</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <span class="pf-title">Application Deadline Date</span>
            <div class="pf-field">
                <input type="text" placeholder="01.11.207" class="form-control datepicker">
            </div>
        </div>
        <div class="col-lg-12">
            <span class="pf-title">Skill Requirments</span>
            <div class="pf-field">
                <ul class="tags">
                    <li class="addedTag">Photoshop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
                    <li class="tagAdd taglist">
                        <input type="text" id="search-field">
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12">
            <span class="pf-title">Complete Address</span>
            <div class="pf-field">
                <textarea>Collins Street West, Victoria 8007, Australia.</textarea>
            </div>
        </div>

    </div>
</form>
