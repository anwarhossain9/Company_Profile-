import React from "react"
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"

export default () => {
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
        <div className="keen-slider__slide"><img className="w-full h-[250px]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRtyR3_sCX3Wykik-F1_IFir4fylyGuzDHgw&s" alt="" /></div>
        <div className="keen-slider__slide"><img className="w-full h-[250px]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT90vnfhupbIMjrWYiYNhE606hbX-F853jckQ&s" alt="" /></div>
        <div className="keen-slider__slide"><img className="w-full h-[250px]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9xUI945Eqj3DNLh4LX2fmQSCLm7HaZoKqNA&s" alt="" /></div>
        <div className="keen-slider__slide"><img className="w-full h-[250px]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcYg3pJghR0SzLmMM1pHiDiC3vif_cFfW8iw&s" alt="" /></div>
      </div>
    </>
  )
}
