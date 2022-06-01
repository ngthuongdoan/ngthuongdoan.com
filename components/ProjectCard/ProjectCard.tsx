import { RoleColor } from 'constants/projects'
import { Project } from 'types/project'
import { iconGenerator } from 'utils/iconGenerator'

type ProjectCardProps = {
  project: Project
}

const ProjectCard: React.FC<ProjectCardProps> = ({ project }) => {
  return (
    <a href="" className="relative block group h-96">
      <span className="absolute inset-0 border-2 border-black border-dashed"></span>

      <div className="relative flex items-end h-full transition-transform transform bg-white border-2 border-black group-hover:-translate-x-2 group-hover:-translate-y-2">
        <div className="px-8 pb-8 transition-opacity group-hover:opacity-0 group-hover:absolute">
          <strong
            className={`rounded border px-3 py-1.5 text-[10px] font-medium text-white 
          ${RoleColor[project.role]}
          `}
          >
            {project.role}
          </strong>

          <h2 className="mt-4 text-2xl font-medium">{project.title}</h2>
        </div>

        <div className="absolute p-8 transition-opacity opacity-0 group-hover:opacity-100 group-hover:relative">
          <h2 className="mt-4 text-2xl font-medium">{project.title}</h2>

          <p className="mt-4 overflow-auto">{project.description}</p>
          <div className="mt-4 sm:flex sm:items-center sm:gap-2">
            <div className="flex items-center gap-4 flex-wrap">
              {project.technologies.map((tech) => iconGenerator(tech))}
            </div>
          </div>
        </div>
      </div>
    </a>
  )
}

export default ProjectCard
