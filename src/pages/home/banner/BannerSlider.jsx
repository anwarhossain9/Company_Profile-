import React from "react"
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"
import useBannerDataLoader from "../../../hooks/useBannerDataLoader"

export default () => {

  const [banner, loader] = useBannerDataLoader();

  const [sliderRef] = useKeenSlider(
    {
      loop: true,
    },
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
          timeout = setTimeout(() => {
            slider.next()
          }, 2000)
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
      },
    ]
  )


  return (
    <>
      <div ref={sliderRef} className="keen-slider">

        {
          banner?.length > 0 &&
          banner.map(ban => (
            <div key={ban.id} className="keen-slider__slide">
              <img className="w-full h-[250px]" src={ban.banner_image} alt="" />
            </div>
          ))
        }

      </div>
    </>
  )
}
