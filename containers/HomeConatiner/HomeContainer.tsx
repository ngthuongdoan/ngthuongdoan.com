import AboutSection from './AboutSection/AboutSection'
import EducationSection from './EducationSection/EducationSection'
import IntroSection from './IntroSection/IntroSection'
import ProjectSection from './ProjectSection/ProjectSection'

type HomeContainerProps = {}

const HomeContainer: React.FC<HomeContainerProps> = () => {
  return (
    <>
      <IntroSection />
      <AboutSection />
      <ProjectSection />
      <EducationSection />
    </>
  )
}

export default HomeContainer
