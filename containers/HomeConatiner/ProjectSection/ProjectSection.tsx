import ProjectCard from 'components/ProjectCard/ProjectCard'
import { PROJECTS } from 'constants/projects'

type ProjectSectionProps = {}

const ProjectSection: React.FC<ProjectSectionProps> = () => {
  // eslint-disable-next-line @typescript-eslint/no-explicit-any
  return (
    <section className="mb-20 pb-20 border-b-2 border-swatch_3">
      <div className="px-4 mx-auto sm:px-6 ">
        {/* Header */}
        <div className="text-center">
          <h2 className=" text-3xl">
            I am passionate about&nbsp;
            <br className="hidden sm:block lg:hidden" />
            my works
          </h2>

          <blockquote className="mt-4">
            <p className="inline italic text-gray-500 text-sm">
              “Pleasure in the job puts perfection in the work.” – Aristotle
            </p>
          </blockquote>
        </div>
        {/* Project Grid */}
        <div className="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-2 2xl:grid-cols-3 2xl:gap-10">
          {PROJECTS.map((project, index: number) => (
            <ProjectCard key={index} project={project} />
          ))}
        </div>
      </div>
    </section>
  )
}

export default ProjectSection
