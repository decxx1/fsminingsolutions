
<div class="col-lg-4 col-md-6 mb-5">
    <div class="ts-service-box">
        <div class="ts-service-image-wrapper" style="height:236px !important">
            <img loading="lazy" src="{{ $directory }}" alt="service-image"
            style="width:100%;height:100%;object-fit: fill !important;">
        </div>
        <div class="d-flex">
            @if($icon && $icon != null && $icon != "")
                <div class="ts-service-box-img">
                    <img loading="lazy" src="{{ $icon }}" alt="service-icon">
                </div>
            @endif
            <div class="@php echo ($icon && $icon != null && $icon != "") ? 'ts-service-info' : '' @endphp">
                <h3 class="service-box-title" style="color:var(--color-destacado-1);font-weight: 700">{{ $title }}</h3>
                <p>{{ $content }}</p>
            </div>
        </div>
    </div><!-- Service end -->
</div>
