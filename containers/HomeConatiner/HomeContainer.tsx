import AboutSection from './AboutSection/AboutSection'
import IntroSection from './IntroSection/IntroSection'
import ProjectSection from './ProjectSection/ProjectSection'

type HomeContainerProps = {}

const HomeContainer: React.FC<HomeContainerProps> = () => {
  return (
    <>
      <IntroSection />
      <AboutSection />
      <ProjectSection />
    </>
  )
}

export default HomeContainer
