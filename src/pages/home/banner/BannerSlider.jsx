import React from "react"
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"
import useBannerDataLoader from "../../../hooks/useBannerDataLoader"
import parse from 'html-react-parser';

export default function BannerSlider() {
  const [banner, loader] = useBannerDataLoader();
  console.log("Data from banner", banner)

  const [sliderRef] = useKeenSlider(
    { loop: true },
    [
      (slider) => {
        let timeout
        let mouseOver = false

        function clearNextTimeout() {
          clearTimeout(timeout)
        }
        function nextTimeout() {
          clearTimeout(timeout)
          if (mouseOver) return
          timeout = setTimeout(() => slider.next(), 3000)
        }

        slider.on("created", () => {
          slider.container.addEventListener("mouseover", () => {
            mouseOver = true
            clearNextTimeout()
          })
          slider.container.addEventListener("mouseout", () => {
            mouseOver = false
            nextTimeout()
          })
          nextTimeout()
        })
        slider.on("dragStarted", clearNextTimeout)
        slider.on("animationEnded", nextTimeout)
        slider.on("updated", nextTimeout)
      }
    ]
  )

  if (loader) {
    return <p className="text-center text-gray-500 py-6">Loading...</p>
  }

  return (
    <section className="w-full">
      <div ref={sliderRef} className="keen-slider shadow-xl">

        {banner?.length > 0 && banner.map(ban => (
          <div key={ban.id} className="keen-slider__slide relative">
            <img
              className="w-full h-[200px] sm:h-[250px] md:h-[300px] lg:h-[400px] object-cover"
              src={ban.banner_image}
              alt={ban.banner_title}
            />

            <div className="absolute bottom-4 left-1/2 transform -translate-x-1/2 
                bg-black/50 px-2 sm:px-4 py-2 rounded-md shadow-md max-w-[90%] sm:max-w-[80%]">
              <h1 className="text-white text-center text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold">
                {ban.banner_title}
              </h1>
              <p className="text-white text-center text-xs sm:text-sm md:text-base mt-1">
                {parse(ban.banner_description)}
              </p>
            </div>
          </div>
        ))}
      </div>
    </section>
  )
}
