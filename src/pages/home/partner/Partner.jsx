import React from "react"
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"
import PartnerItem from "./shared/PartnerItem"
import Title from "../../../components/title/Title"
import usePartnerLoader from "../../../hooks/usePartnerLoader"
function Partner() {
    const [partners, loader] = usePartnerLoader();
    const [sliderRef] = useKeenSlider({
        loop: true,
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
    if (loader) {
        return <p>Data is loading...</p>
    }
    return (
        <section>
            <div className=" py-4 md:px-4 lg:px-8 mx-auto">
                <Title title="Our partner" subtitle=" Together, we grow stronger"></Title>
                <div ref={sliderRef} className="keen-slider my-4">

                    {
                        partners.map(partner => <div className="keen-slider__slide card shadow-lg bg-white"><PartnerItem partner_image={partner.partner_image}></PartnerItem></div>)
                    }
                </div>
            </div>
        </section>
    )
}

export default Partner