import ProjectCard from 'components/ProjectCard/ProjectCard'

type ProjectSectionProps = {}

const ProjectSection: React.FC<ProjectSectionProps> = () => {
  return (
    <section className="mb-20 pb-20 border-b-2 border-swatch_3 ">
      <h1 className="text-center text-3xl">I am passionate about my work</h1>

      <div className="flex flex-col items-center justify-center mt-16 px-16 flex-wrap gap-8">
        <ProjectCard />
      </div>
    </section>
  )
}

export default ProjectSection
