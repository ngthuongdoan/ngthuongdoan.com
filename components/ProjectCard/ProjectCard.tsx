import Icons from 'components/Icons'

type ProjectCardProps = {}

const ProjectCard: React.FC<ProjectCardProps> = () => {
  return (
    <a href="" className="relative block group h-96">
      <span className="absolute inset-0 border-2 border-black border-dashed"></span>

      <div className="relative flex items-end h-full transition-transform transform bg-white border-2 border-black group-hover:-translate-x-2 group-hover:-translate-y-2">
        <div className="px-8 pb-8 transition-opacity group-hover:opacity-0 group-hover:absolute">
          <strong className="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white">
            Full Stack Developer
          </strong>

          <h2 className="mt-4 text-2xl font-medium">
            Flix - The Netflix Clone
          </h2>
        </div>

        <div className="absolute p-8 transition-opacity opacity-0 group-hover:opacity-100 group-hover:relative">
          <h2 className="mt-4 text-2xl font-medium">
            Flix - The Netflix Clone
          </h2>

          <p className="mt-4 overflow-auto">
            A cloned web application inspired by Netflix - for practice
            purposes. It contains many features such as watching trending
            movies, subscribing with Stripe, account management with Firebase,
            etc.
          </p>
          <div className="mt-4 sm:flex sm:items-center sm:gap-2">
            <div className="flex items-center gap-4">
              <Icons.NextJS size={36} />
              <Icons.Redux size={26} />
              <Icons.TailwindCSS size={120} />
              <Icons.Node size={26} />
              <Icons.Firebase size={95} />
            </div>
          </div>

          <p className="mt-8 font-bold">Read more</p>
        </div>
      </div>
    </a>
  )
}

export default ProjectCard
