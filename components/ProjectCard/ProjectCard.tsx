import Icons from 'components/Icons'
import Image from 'next/image'
import Flix from 'assets/img/flix.png'

type ProjectCardProps = {}

const ProjectCard: React.FC<ProjectCardProps> = () => {
  return (
    <article className="p-6 bg-white sm:p-8 rounded-xl ring ring-indigo-50">
      <div className="flex items-start">
        <div className="max-w-[300px] w-full h-full " aria-hidden="true">
          <Image src={Flix} />
        </div>

        <div className="sm:ml-8">
          <strong className="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white">
            Full Stack Developer
          </strong>

          <h2 className="mt-4 text-lg font-medium sm:text-xl">
            <a href="" className="hover:underline">
              Flix - The Netflix Clone
            </a>
          </h2>

          <p className="mt-1 text-sm text-gray-700">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
            nulla amet voluptatum sit rerum, atque, quo culpa ut necessitatibus
            eius suscipit eum accusamus, aperiam voluptas exercitationem facere
            aliquid fuga. Sint.
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
        </div>
      </div>
    </article>
  )
}

export default ProjectCard
