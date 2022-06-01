export type Project = {
  id: string
  title: string
  role: Role
  description: string
  technologies: Array<Technology>
}

export enum Role {
  FullStackDeveloper = 'Full Stack Developer',
  FrontendDeveloper = 'Frontend Developer',
}

export enum Technology {
  Arrow,
  CSS3,
  Download,
  Facebook,
  Firebase,
  Github,
  HTML5,
  Javascript,
  Jest,
  Linkedin,
  Mail,
  Map,
  NextJS,
  Node,
  ReactIcon,
  Redux,
  Sass,
  TailwindCSS,
  Typescript,
  VietnamFlag,
  Vue,
}
