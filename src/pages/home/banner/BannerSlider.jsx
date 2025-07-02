import React from "react"
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"
import useBannerDataLoader from "../../../hooks/useBannerDataLoader"

export default () => {

  const [banner, loader] = useBannerDataLoader();


  console.log(banner)




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

  if (loader) {
    return <p>loading...</p>
  }

  return (
    <>
      <section>
        <div ref={sliderRef} className="keen-slider shadow-xl">

          {
            banner?.length > 0 &&
            banner.map(ban => (
              <div key={ban.id} className="keen-slider__slide">
                <img className="w-full md:max-h-[400px] lg:max-h-[400px]" src={ban.image_url} alt="" />
              </div>
            ))
          }

        </div>
      </section>
    </>
  )
}
