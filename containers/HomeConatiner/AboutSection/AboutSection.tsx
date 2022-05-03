import Icons from 'components/Icons'
import Image from 'next/image'
import StyledComponent from 'assets/img/styled-component.png'
type AboutSectionProps = {}

const AboutSection: React.FC<AboutSectionProps> = () => {
  return (
    <section className="my-20 py-20 border-y-2 border-swatch_3 ">
      <h1 className="text-center text-3xl">I am currently working on</h1>

      <div className="grid grid-row-3 items-center justify-center mt-16 px-16 flex-wrap gap-8">
        <div className="flex items-center justify-center gap-10">
          <Icons.Javascript size={85} />
          <Icons.Typescript size={85} />
          <Icons.HTML5 size={85} />
          <Icons.CSS3 size={85} />
        </div>
        <div className="flex items-center justify-center gap-10">
          <Icons.ReactIcon size={85} />
          <Icons.NextJS size={85} />
          <Icons.Vue size={85} />
          <Icons.Node size={85} />
        </div>
        <div className="flex  items-center justify-center gap-10">
          <Icons.Redux size={85} />
          <Image
            src={StyledComponent}
            width={85}
            height={85}
            objectFit="contain"
            className="bg-swatch_4"
          />
          <Icons.Jest size={85} />
          <Icons.TailwindCSS size={85} />
          <Icons.Sass size={85} />
        </div>
      </div>
    </section>
  )
}

export default AboutSection
