@props(['employer', 'width' => 90])

{{-- <img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}" class="rounded-xl" alt=""> --}}
<img src="{{ Storage::disk('public')->url($employer->logo) }}" class="rounded-xl" alt=""
    width="{{ $width }}">
