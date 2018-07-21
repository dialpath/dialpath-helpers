@if (in_array($type, ['raw', 'html', 'token', 'image', 'button', 'submit', 'reset']))
  {!! $label !!}{!! $input !!}
@else
  <div class="form-group form-float">
    <div class="form-line">
      @if (!empty($pre))
        <span class="input-group-addon">{!! $pre !!}</span>
      @endif
      {!! $input !!}
      @if (!empty($post))
        <span class="input-group-addon">{!! $post !!}</span>
      @endif
      {!! $label !!}
    </div>
    @if (!empty($comment))
      <p class="small" style="color: #777; font-size:11px;">{{ $comment }}</p>
    @endif
  </div>

@endif