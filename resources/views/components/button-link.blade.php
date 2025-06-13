@props([
    'href' => '#',
    'text' => 'LEARN MORE',
])

<a href="{{ $href }}"
    {{ $attributes->merge([
        'class' =>
            'relative inline-block w-fit text-white font-poppins font-bold rounded-full px-6 md:px-7 py-3 text-sm md:text-[14px] border-2 border-[#009FF9] transition-all duration-300 hover:scale-105 hover:border-white bg-transparent hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0] shadow-[0_0_20px_#009FF9] hover:shadow-[0_0_40px_#08FFF0]',
    ]) }}>
    {{ $text }}
</a>
