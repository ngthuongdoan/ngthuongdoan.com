import Icons from 'components/Icons'
import { ProjectTechnology } from 'constants/projects'
import { Technology } from 'types/project'

export function iconGenerator(icon: Technology) {
  switch (icon) {
    case Technology.NextJS:
      return <Icons.NextJS size={ProjectTechnology[Technology.NextJS]} />
    case Technology.Redux:
      return <Icons.Redux size={ProjectTechnology[Technology.Redux]} />
    case Technology.TailwindCSS:
      return (
        <Icons.TailwindCSS size={ProjectTechnology[Technology.TailwindCSS]} />
      )
    case Technology.Node:
      return <Icons.Node size={ProjectTechnology[Technology.Node]} />
    case Technology.Firebase:
      return <Icons.Firebase size={ProjectTechnology[Technology.Firebase]} />
    case Technology.CSS3:
      return <Icons.CSS3 size={26} />
    case Technology.ReactIcon:
      return <Icons.ReactIcon size={26} />
    case Technology.Vue:
      return <Icons.Vue size={26} />
    case Technology.Sass:
      return <Icons.Sass size={26} />
    case Technology.Typescript:
      return <Icons.Typescript size={26} />
  }
  return <></>
}
