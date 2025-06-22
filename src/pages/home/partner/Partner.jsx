import React from "react"
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"
import PartnerItem from "./shared/PartnerItem"
function Partner() {
    const [sliderRef] = useKeenSlider({
        breakpoints: {
            "(min-width: 400px)": {
                slides: { perView: 2, spacing: 5 },
            },
            "(min-width: 1000px)": {
                slides: { perView: 4, spacing: 10 },
            },
        },
        slides: { perView: 1 },
    })
    return (
        <div ref={sliderRef} className="keen-slider my-4">
            <div className="keen-slider__slide"><PartnerItem></PartnerItem></div>
            <div className="keen-slider__slide"><PartnerItem></PartnerItem></div>
            <div className="keen-slider__slide"><PartnerItem></PartnerItem></div>
            <div className="keen-slider__slide"><PartnerItem></PartnerItem></div>
            <div className="keen-slider__slide"><PartnerItem></PartnerItem></div>
            <div className="keen-slider__slide"><PartnerItem></PartnerItem></div>
        </div>
    )
}

export default Partner