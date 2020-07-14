<select class="form-control" name="section_id" id="section_id" onchange="onChangeSection(this.value)" required>
    @if (count($sections) == 0)
        <option value="">{{ translate('select_a_class') }}</option>
    @else
        <option value="">{{ translate('select_a_section') }}</option>
        @foreach ($sections as $section)
            <option value="{{ $section->id }}">{{ $section->name }}</option>
        @endforeach
    @endif
</select>
