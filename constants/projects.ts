import { Project, Role, Technology } from 'types/project'
import { v4 as uuidv4 } from 'uuid'

export const RoleColor = {
  [Role.FullStackDeveloper]: 'border-indigo-500 bg-indigo-500',
  [Role.FrontendDeveloper]: 'border-red-500 bg-red-500',
}

export const ProjectTechnology = {
  [Technology.NextJS]: 36,
  [Technology.Redux]: 26,
  [Technology.TailwindCSS]: 120,
  [Technology.Node]: 26,
  [Technology.Firebase]: 95,
}

export const PROJECTS: Array<Project> = [
  {
    id: uuidv4(),
    title: 'Flix - The Netflix Clone',
    role: Role.FullStackDeveloper,
    description:
      'A cloned web application inspired by Netflix - for practice purposes. It contains many features such as watching trending movies, subscribing with Stripe, account management with Firebase, etc.',
    technologies: [
      Technology.NextJS,
      Technology.Redux,
      Technology.TailwindCSS,
      Technology.Firebase,
    ],
  },
  {
    id: uuidv4(),
    title: 'Mobile-Optimised Digital Business Card',
    role: Role.FrontendDeveloper,
    description:
      'This is a website for user to create, share their Digital Business Cards with others vie mobile phone. Integrated with Apply Wallet and Google Pay.',
    technologies: [
      Technology.NextJS,
      Technology.Redux,
      Technology.ReactIcon,
      Technology.Sass,
      Technology.Typescript,
    ],
  },
  {
    id: uuidv4(),
    title: 'Arabic Learning Platform for Children',
    role: Role.FrontendDeveloper,
    description:
      "This is a system that includes Web Applications for management system's teachers, vouchers, etc., and Mobile Applications. It helps users to teach their children Arabic.",
    technologies: [
      Technology.NextJS,
      Technology.ReactIcon,
      Technology.Redux,
      Technology.TailwindCSS,
    ],
  },
  {
    id: uuidv4(),
    title: 'Market Management System',
    role: Role.FrontendDeveloper,
    description:
      'This is a system for merchants to manage their business, pair with terminals, EFTPOS, Tyro supported, etc.',
    technologies: [
      Technology.NextJS,
      Technology.ReactIcon,
      Technology.Redux,
      Technology.TailwindCSS,
    ],
  },
  {
    id: uuidv4(),
    title: 'Business Financial Tracking System',
    role: Role.FrontendDeveloper,
    description:
      'This is the all-encompassing bookkeeper and business app to help you access information on-the-go, save time and run your business better.',
    technologies: [
      Technology.NextJS,
      Technology.ReactIcon,
      Technology.Redux,
      Technology.TailwindCSS,
    ],
  },
]
