import Icons from 'components/Icons'
import Image from 'next/image'
import MainImage from 'assets/img/bitexco.jpeg'

type IntroSectionProps = {}

const IntroSection: React.FC<IntroSectionProps> = () => {
  return (
    <section className="pt-20">
      <div className="text-center text-3xl">
        <h1>Eddie Doan</h1>
        <h1>Front End Developer</h1>
        <h1>Based in Vietnam</h1>
      </div>

      <div className="flex items-center justify-between mt-6 px-16">
        {/* Left Part */}
        <div className="flex flex-col gap-12 max-w-[150px]">
          <div>
            <h2 className="font-bold text-swatch_2 uppercase font-source-sans text-sm mb-8">
              Biography
            </h2>
            <p className="text-sm leading-6">
              Hi! I&apos;m Eddie Doan, a Frontend Developer based in Vietnam
            </p>
          </div>

          <div>
            <h2 className="font-bold text-swatch_2 uppercase font-source-sans text-sm mb-8">
              Contact
            </h2>
            <div className="text-sm leading-6">
              <a
                href="https://maps.google.com/?q=cantho"
                target="_blank"
                rel="noopener noreferrer"
                className="inline-flex gap-2 items-center"
              >
                <i>
                  <Icons.Map />
                </i>
                <span>Can Tho, Vietnam</span>
              </a>
              <p>
                <a
                  href="mailto:ngthuongdoan@gmail.com"
                  rel="noopener noreferrer"
                  className="inline-flex gap-2 items-center"
                >
                  <i>
                    <Icons.Mail />
                  </i>
                  <span>ngthuongdoan@gmail.com</span>
                </a>
              </p>
              <p>
                <a
                  href="tel:+84941635619"
                  rel="noopener noreferrer nofollow"
                  className="inline-flex gap-2 items-center"
                >
                  <i>
                    <Icons.VietnamFlag />
                  </i>
                  <span>(+84)-941-635-619</span>
                </a>
              </p>
            </div>
          </div>
        </div>

        <div className="flex items-center justify-center w-72 overflow-hidden rounded-full border p-6 z-10">
          <Image
            src={MainImage}
            objectFit="cover"
            className="p-8 rounded-full z-10"
          />
        </div>
        {/* Right Part */}
        <div className="flex flex-col gap-12 max-w-[150px]">
          <div>
            <h2 className="font-bold text-swatch_2 uppercase font-source-sans text-sm mb-8">
              Tech Stack
            </h2>
            <div className="flex gap-6 flex-wrap items-center ">
              <Icons.ReactIcon />
              <Icons.Redux />
              <Icons.Typescript />
              <Icons.Vue />
              <Icons.Node />
              <Icons.Jest />
              <Icons.Javascript />
              <Icons.HTML5 />
              <Icons.CSS3 />
              <Icons.Sass />
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default IntroSection
